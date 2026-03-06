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
                bat 'dir vendor/autoload.php || exit /b 1'  // Fail if missing
            }
        }
        stage('Test') {
            steps {
                bat '"%PHP_PATH%" artisan --version'  // Uses autoload
            }
        }
        }

}
