# To learn more about how to use Nix to configure your environment
# see: https://firebase.google.com/docs/studio/customize-workspace
{ pkgs, ... }: {
  # Which nixpkgs channel to use.
  channel = "stable-24.05"; # or "unstable"
  # Use https://search.nixos.org/packages to find packages
  packages = [
    pkgs.php
  ];
  # Sets environment variables in the workspace
  env = {};
  idx = {
    # Search for the extensions you want on https://open-vsx.org/ and use "publisher.id"
    extensions = [
      "rangav.vscode-thunder-client"
    ];
    previews = {
      enable = true;
      previews = {
        web = {
          command = ["php" "-S" "0.0.0.0:$PORT" "index.php"];
          manager = "web";
        };
      };
    };
    workspace = {
      onCreate = {
        # Open editors for the following files by default, if they exist:
        default.openFiles = ["pages/startseite.php"];
      };
      # Runs when a workspace is (re)started
      #onStart= {
        #run-server = "php -S localhost:3000 pages/startseite.php";
      #};
    };
  };
}