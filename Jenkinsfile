pipeline {
    agent any

    environment {
        PHP_PATH       = 'C:\\Users\\MB540WS\\.config\\herd-lite\\bin\\php.exe'
        COMPOSER_PATH  = 'C:\\Users\\MB540WS\\.config\\herd-lite\\bin\\composer.bat'
        LOCAL_DEPLOYPATH = 'C:\\Vedant\\Git\\greenvest'
    }

    stages {
        stage('Checkout') {
            steps {
                git branch: 'main',
                    credentialsId: 'github-vedant',
                    url: 'https://github.com/vedantpatelp2006-del/greenvest'
            }
        }

      stage('Environment') {
    steps {
        bat """
        copy /Y .env.example .env
        "C:\\Users\\MB540WS\\.config\\herd-lite\\bin\\php.exe" artisan key:generate --force
        """
    }
}


        stage('Test DB') {
            steps {
                bat """
                if exist database\\database.sqlite del database\\database.sqlite
                "%PHP_PATH%" artisan migrate:fresh --seed
                """
            }
        }

        stage('Test') {
            steps {
                bat "\"%PHP_PATH%\" artisan test"
            }
        }

        stage('Deploy Local') {
            steps {
                bat """
                    if exist exclude.txt (
                        xcopy /E /I /Y /H . "%LOCAL_DEPLOYPATH%" /exclude:exclude.txt
                    ) else (
                        xcopy /E /I /Y /H . "%LOCAL_DEPLOYPATH%"
                    )
                """


            }
        }


    }


}
