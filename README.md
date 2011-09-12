# Hello Kohana

This is project to learn git and Kohana.

When cloning this repository ensure to use the recursive flag:

    git clone --recursive git@github.com:nobien/hello-kohana.git

If you happen to not clone the repository without the recursive flag do the following:

    git clone git@github.com:nobien/hello-kohana.git
    git submodule init
    git submodule update
    cd modules/kostache
    git submodule init
    git submodule update

Then you'll most likely want to configure an local installation of Apache so you can start developing. Use the sample.htaccess file to setup your vhost or rename the file to .htaccess.
