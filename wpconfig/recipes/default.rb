template "/srv/www/wordpress/current/wp-config.php" do
  source "wp-config.php.erb"
  mode '0755'
  owner 'deploy'
  group 'www-data'

  variables(
    :redishost => (node[:wpconfig][:redishost] rescue nil),
    :wphome   => (node[:wpconfig][:wphome] rescue nil),
    :wpsiteurl   => (node[:wpconfig][:wpsiteurl] rescue nil),
    :dbname   => (node[:wpconfig][:dbname] rescue nil),
    :dbuser       => (node[:wpconfig][:dbuser] rescue nil),
    :dbpassword   => (node[:wpconfig][:dbpassword] rescue nil),
    :dbhost       => (node[:wpconfig][:dbhost] rescue nil)
    )
end
