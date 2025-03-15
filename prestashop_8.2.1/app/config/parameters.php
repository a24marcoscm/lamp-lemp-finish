<?php
$db_host = getenv('DB_HOST') ?? 'db';
$db_port = getenv('DB_PORT') ?? '';
$mysql_database = getenv('MYSQL_DATABASE') ?? 'database';
$mysql_user = getenv('MYSQL_USER') ?? 'user';
$mysql_password = getenv('MYSQL_PASSWORD') ?? '';
return array (
  'parameters' => 
  array (
    'database_host' => $db_host,
    'database_port' => $db_port,
    'database_name' => $mysql_database,
    'database_user' => $mysql_user,
    'database_password' => $mysql_password,
    'database_prefix' => 'ps_',
    'database_engine' => 'InnoDB',
    'mailer_transport' => 'smtp',
    'mailer_host' => '127.0.0.1',
    'mailer_user' => NULL,
    'mailer_password' => NULL,
    'secret' => 'd7keLoDOFE0EGIno0y3AmICFU8GRdN2YQmjqnatBfTsEyude03uABRsszi7CSawI',
    'ps_caching' => 'CacheMemcache',
    'ps_cache_enable' => false,
    'ps_creation_date' => '2025-03-15',
    'locale' => 'es-ES',
    'use_debug_toolbar' => true,
    'cookie_key' => 'MTI7IYgCBIvFXfkNpIP5oB0WVRsGyTUHMNS2NyMrX8WLqPhhAKHEt06tuigoIZN2',
    'cookie_iv' => 'T6XSSw2M0RZy0UNOgs7OtgdqJOOIW7Na',
    'new_cookie_key' => 'def0000032965d25d1a45f5d222203254fdd7d0efa1238ec8a8c9fb7c563656148bf52f2a4d94c49f908b90ed9c4c12f3e3b74d8f4271f7b76566fb6bdadc2b2f827583d',
    'api_public_key' => '-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAlwabXzPuSS4OWmzDWu4L
jWJeVBJ7mESs1xx/D0iVXHzvn5gHgD+wEpJ5DfPIKoRkhjs7PidYj+zDfVvKCjOB
NFbazukJr8793b8IpUKsT0E7vNvrVHkLHwmXwM1fAKXQlAjBBAiI6PMSAn4SLgmo
FiO8NLMDMBNT1FJjfarFvf2elg8WDbkDYLagsaeVCKnOQL9tXjrmbi5kKoJjFdOr
V+KIzZ+SITGmiltlebUgmYrpQTJKjlPLIKNGMW2chx3O7IQHLSPAO/zFp42RZP65
wUGtY1emwq4Y4Hdnik6X25qhoWyWsvgv74ETpuXBc5NJ8phTpFdP1hHQBOI9lAQz
UwIDAQAB
-----END PUBLIC KEY-----
',
    'api_private_key' => '-----BEGIN PRIVATE KEY-----
MIIEvwIBADANBgkqhkiG9w0BAQEFAASCBKkwggSlAgEAAoIBAQCXBptfM+5JLg5a
bMNa7guNYl5UEnuYRKzXHH8PSJVcfO+fmAeAP7ASknkN88gqhGSGOzs+J1iP7MN9
W8oKM4E0VtrO6Qmvzv3dvwilQqxPQTu82+tUeQsfCZfAzV8ApdCUCMEECIjo8xIC
fhIuCagWI7w0swMwE1PUUmN9qsW9/Z6WDxYNuQNgtqCxp5UIqc5Av21eOuZuLmQq
gmMV06tX4ojNn5IhMaaKW2V5tSCZiulBMkqOU8sgo0YxbZyHHc7shActI8A7/MWn
jZFk/rnBQa1jV6bCrhjgd2eKTpfbmqGhbJay+C/vgROm5cFzk0nymFOkV0/WEdAE
4j2UBDNTAgMBAAECggEAP8lqlis42W+6YDbPy/f+qRiC/r9PtGBNIA3JHItrikS6
cI2lnWVI2I9E0b/FKy//xTH/M6Eqpp85chjynJxkVdbZU8rZbIfgcWfeHu6qGE9V
C89W9baqG9HRZn1XQs7F6cBIxYtVSA5h7OuSgh9R/wfY1elFz2haX7LskocuPa/a
hCskOiL4/hL1PNKNmjVLiE3tIfQZ0SMieBq5NUS9UGQsh+nP6o8kognOZkRNMBh0
RhFlPUkv9M6Id/hV2zC9+vKmBJfYwFr8ctBmGohUrfFUPdlwdggRIx4ry4mK8Qvb
F1ynxot4mO6y51il52YSDz8KanZiBYblpuFhWApSAQKBgQDQ7U5QhRMn1CeyX765
w4LCRRKp7ZpzZgWu+D60F0DXTsiMCFvIN+UHrKlSUuY05LbMtydsd2kMZnehiIgQ
48PlV1xS30EkI7eH5zmTp4Q75ZZFnoa01KM5CVm3YfOwi5xmxmdc1fcfXRGlYaYK
1Lcq0ng6RAbk0Dhhs3Y+L/fuWwKBgQC5DZ70iqcpFEpjE2QsPlGcbkT7OnSv8yyr
eVG6r0bkad1YZ4lp1XqmGx7Vcc69pRdAqMTq+cezNB4N9YqPTg42IGVA9pk83qxD
PyxmHFicuivUPlOfzr2Qa9bRNvSXdHsCmDYQ/fkU+HjKszyhm35dX+SryRMKSKcD
8XfCfDVQaQKBgQCf0fhHhhTKMfOP8sf+aH3dSGNnk/fDcPbGCuZEc0lJqt2kqTw0
o/VScpUwAXRSX+cqIK1Kvumf775x1fRoHyOai8J3LosxLxVVI98agVmZTB4w8XyQ
VdzqY6m6q3ZzxciFoh4tmQuqdVJrVZBj1qarXkdUIve3D0UiD9tS5PTe4wKBgQCZ
3yeTM093qvWHmHItD8yQhGg7dgnc3BkCpCg/UMtj1ltEzSLHq8kGIXrsBGvh6UqC
a1MCB5vz+JwdA1SpgD/05c8Ly4Dzyjv21qq2ZU+RUoRrQUALm76oPeMrp8SNwz8d
ky8xxdy9gTX/ZjY+MqtKPRhJdzKr1Gl7r+bjAqDaMQKBgQCSZdwolaOwtIu8OSWw
VajWWiAg5K2c1rUluOz+b+VoRxHnJwdLP5JMkbCZPHJRs2ygE6EuYF3GUPJ4PJnL
vz8XKtg0tnjwwEnoUxUkOT0gyDzDvwBxwgyDIB4XxTnyB/nFpJ6Bh0tYlnhzIrWC
CzZFBAMxyES7iJzd1QPczF1etw==
-----END PRIVATE KEY-----
',
  ),
);