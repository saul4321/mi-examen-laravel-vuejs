pipeline {
    agent any

    stages {
        stage('Clonar Repositorio') {
            steps {
                script {
                    // Clonar el repositorio desde GitHub
                    checkout([$class: 'GitSCM', branches: [[name: '*/main']], doGenerateSubmoduleConfigurations: false, extensions: [[$class: 'RelativeTargetDirectory', relativeTargetDir: '']], submoduleCfg: [], userRemoteConfigs: [[credentialsId: '/root/.ssh/id_rsa', url: 'https://github.com/saul4321/mi-examen-laravel-vuejs.git']]])
                }
            }
        }

        stage('Instalar Dependencias') {
            steps {
                script {
                    // Instalar dependencias de Laravel
                    sh 'composer install'
                }
            }
        }

        stage('Ejecutar Pruebas') {
            steps {
                script {
                    // Ejecutar pruebas PHPUnit
                    sh 'php artisan test'
                }
            }
        }

        // stage('Desplegar') {
        //     steps {
        //         script {
        //             // Tu lógica de despliegue aquí
        //             // Por ejemplo, puedes ejecutar comandos para desplegar en un servidor.
        //         }
        //     }
        // }
    }
}
