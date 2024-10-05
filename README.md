# User Guide for Mobile Htdocs Setup by ruzz-gd
### This guide will help you set up and run a local web server on your mobile device using Termux. This setup mimics the traditional XAMPP htdocs folder, allowing you to develop websites directly from your phone.

## Clone into Termux Home:
```
git clone https://github.com/Ruzz-GD/mobile-htdocs.git
```
### If you see this:
#### fatal: detected dubious ownership in repository at '/storage/emulated/0/mobile-htdocs'
To add an exception for this directory, call:
        git config --global --add safe.directory /storage/emulated/0/mobile-htdocs
### run:
```
git config --global --add safe.directory /storage/emulated/0/mobile-htdocs
```
## Clone into Shared Storage:
### First, you need to set up Termux to access your phone's shared storage. This will allow you to manage files both in Termux and from your file manager or other apps.
```
termux-setup-storage
```
### Once you’ve set up access, you can now clone the repository directly into your phone’s shared storage, allowing you to edit files from any file manager or app outside Termux:
```
git clone https://github.com/Ruzz-GD/mobile-htdocs.git ~/storage/shared/mobile-htdocs
```
## View Configuration Files and Setup Instructions:
### To ensure everything is configured correctly, you can find additional setup instructions and configuration details in the .txt files provided within the repository. These files contain important information to help you:
-first-setup-and-required-packages.txt
-apache-config-guide.txt
-mariadb-config-guide.txt
-phpmyadmin-config-guide.txt
### Make sure to review the provided configuration files to fully understand the setup and adjust settings according to your specific needs.