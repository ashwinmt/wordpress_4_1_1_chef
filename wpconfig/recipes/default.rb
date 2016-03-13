template "/srv/www/wordpress/current/wp-config.php" do
  source "wp-config.php.erb"
  mode '0755'
  owner 'deploy'
  group 'www-data'

  variables(
    :redishost => (deploy[:wpconfig][:redishost] rescue nil),
    :wphome   => (deploy[:wpconfig][:wphome] rescue nil),
    :wpsiteurl   => (deploy[:wpconfig][:wpsiteurl] rescue nil),
    :dbname   => (deploy[:wpconfig][:dbname] rescue nil),
    :dbuser       => (deploy[:wpconfig][:dbuser] rescue nil),
    :dbpassword   => (deploy[:wpconfig][:dbpassword] rescue nil),
    :dbhost       => (deploy[:wpconfig][:dbhost] rescue nil)
    )
end
