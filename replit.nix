{ pkgs }: {
  deps = [
    pkgs.php74
    pkgs.nodePackages.vscode-langservers-extracted
    pkgs.nodePackages.typescript-language-server  
  ];
}