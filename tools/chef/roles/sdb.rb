name 'sdb'
description 'mysql slave'

run_list 'recipe[boilerplate::apt_fast]', 'recipe[build-essential]',
'recipe[database::mysql]', 'recipe[mysql::server]', 'recipe[boilerplate::mysql]'

override_attributes(
  'mysql' => {
    :role => :slave
  },
  'build-essential' => {
    :compile_time => true
  }
)
