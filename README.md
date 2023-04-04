## Playground

### Intall pecl gnugp (Ued for GPG encryption)

`sudo apt install libgpgme11-dev`  
`pecl install gnupg`  

create a new file under /etc/php/8.x/fpm/conf.d folder and add the line below

`configuration for gnupg module`  
`extension=gnupg.so`

Save and reload fpm.
