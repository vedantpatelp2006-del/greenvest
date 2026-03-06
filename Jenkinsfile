pipeline {
    agent any

    environment {
        PHP_PATH       = 'C:\\Users\\MB540WS\\.config\\herd-lite\\bin\\php.exe'
        COMPOSER_PATH  = 'C:\\Users\\MB540WS\\.config\\herd-lite\\bin\\composer.bat'
        LOCAL_DEPLOYPATH = 'C:\\Vedant\\Git\\greenvest'
    }

stages {
        stage('Composer Install') {           // CRITICAL
            steps {
                bat 'if not exist vendor "%COMPOSER_PATH%" install --no-progress --no-interaction --no-dev'
            }
        }
        stage('Test') {
            steps {
                bat '"%PHP_PATH%" artisan --version'  // Uses autoload
            }
        }
        }

}
