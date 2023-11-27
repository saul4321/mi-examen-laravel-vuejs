pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                echo 'Building...'
                // Agrega tus pasos de construcción aquí
            }
        }
        stage('Test') {
            steps {
                echo 'Testing...'
                // Agrega tus pasos de prueba aquí
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying...'
                // Agrega tus pasos de implementación aquí
            }
        }
    }

    post {
        always {
            echo 'This will always run'
        }
    }
}
