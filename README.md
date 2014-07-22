Collabreate
===========

Collabreate is a digital services exchange, currently for the Boston University community. Individuals looking to work on digital projects (such as website design, mobile app development, or photography) can create a profile to show off his or her portfolio. Those looking to recruit a person can then browse these profiles, with an ability to filter by project requirements. Collabreate is free for the BU community.

## Installation

Collabreate is not intended to be installed by end users. However, the project developers encourage any contributions, ranging from code to feature suggestions, and with that in mind, have outlined the steps to use Collabreate on your local environment.

Note: Collabreate uses a dedicated VM powered by Vagrant. If you already have Vagrant and a VM environment set up, skip to step 4. If you already have Laravel Homestead set up, skip to step 7.

1. Download VirtualBox at https://www.virtualbox.org/wiki/Downloads. Windows users must download version 4.3.12 as there is a bug with the current version that prevents the VM to boot.
2. Download Vagrant at http://www.vagrantup.com/downloads.html.
3. After you have downloaded the installers, install VirtualBox first. Then install Vagrant. Confirm all dialogs that appear and restart your machine as prompted.
4. Start your operating system's terminal environment (i.e. powershell, cmd, Terminal) and type
```
vagrant box add laravel/homestead
```
5. Allow that command to finish. Next, set up Laravel Homestead into a central `Homestead` directory:
```
git clone https://github.com/laravel/homestead.git Homestead
```
6. Edit the `Homestead.yaml` file in the `Homestead` directory by entering in your SSH key into the `authorize: ...` and `keys: ...` fields. You may need to run `ssh-keygen -t rsa -C "email@example.com"` to generate an SSH key. `ssh-keygen` works on Unix based systems. For Windows, installing `git` and using the `Git Bash` shell from that installation will allow you to also generate an SSH key. PuTTY or PuTTYgen work as well. If you have a Github for Windows installation available on your machine, you may already have files called `github_rsa.pub` and `github_rsa`, which you can specify in the `Homestead.yaml` file.
7. Create a new directory called `collabreate` **outside** of the `Homestead` directory. This can be done by running `cd ..` and then `mkdir collabreate`. Then run `cd collabreate` to go into the directory.
8. Download Collabreate by running `git clone https://github.com/michaeltli/collabreate-next` **in** the `collabreate` folder.
9. Go back to the `Homestead` directory. In `Homestead.yaml`, under the `folders: ...` section, change `map: ...` to `map: Path/to/your/collabreate/directory` (not that actual path, specify where your `collabreate` directory is).
10. Under the `sites: ...` section, change `map: ...` to `map: collabreate.app` and `to: ...` to `to: /home/vagrant/Code/collabreate/collabreate/public`.
11. Next, go into your operating system's **hosts** file. Under Windows, it is found under `C:\Windows\system32\drivers\etc\hosts`. Under OS X, it is ask kyle for this. Add `127.0.0.1   collabreate.app` (note the spaces) to the hosts file.
12. Next, start the VM by running
```
vagrant up
```
13. After everything finishes loading, run
```
vagrant ssh
``` with a password of `vagrant`. If Vagrant tells you that you do not have an SSH client available, Secure Shell Google Chrome App works well. Be sure to enter in the correct SSH details to connect.
14. Type `cd Code/collabreate` followed by `composer install`. The latter command will take a few minutes.
15. Finally, in your local environment browser, navigate to `http://collabreate.app:8080` and enjoy Collabreate, albeit with no users.
16. maybe make this installation how to a little bit more easier with a script that does all of this for you.
