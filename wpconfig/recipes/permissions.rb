execute "change directory permissions for wp-content" do
  command "chmod -R 774 /srv/www/wordpress/current/wp-content/"
end