name 'mdb'
description 'mysql master'

run_list 'recipe[boilerplate::apt_fast]', 'recipe[build-essential]', 'recipe[mysql::server]',
'recipe[boilerplate::mysql]'

override_attributes(
  'mysql' => {
    :role => :master
  },
  'build-essential' => {
    :compile_time => true
  }
)
