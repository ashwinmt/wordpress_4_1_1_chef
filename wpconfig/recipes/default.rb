cookbook_file "/srv/www/wordpress/current/wp-config.php" do
  source "wp-config.php"
  mode '0755'
  action :create
  owner 'deploy'
  group 'www-data'

  variables(
    :redishost => (deploy[:wpconfig][:redishost] rescue nil),
    :wphome   => (deploy[:database][:wphome] rescue nil),
    :wpsiteurl   => (deploy[:database][:wpsiteurl] rescue nil),
    :dbname   => (deploy[:database][:dbname] rescue nil),
    :dbuser       => (deploy[:database][:dbuser] rescue nil),
    :dbpassword   => (deploy[:database][:dbpassword] rescue nil),
    :dbhost       => (deploy[:database][:dbhost] rescue nil)
    )
end
