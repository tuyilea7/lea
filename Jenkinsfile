pipeline {
    agent any
    
    stages {
        stage('Checkout') {
            steps {
                echo 'Checkout stage running'
                git branch: 'main', url: 'https://github.com/yourusername/ride-sharing-app.git'
            }
        }
        
        stage('Build') {
            steps {
                echo 'Build stage running'
                sh 'docker-compose build'
            }
        }
        
        stage('Test') {
            steps {
                echo 'Test stage running'
                sh 'docker-compose run --rm 220009456-web php -l src/index.php'
                sh 'docker-compose run --rm 220009456-web php -l src/registration.php'
                sh 'docker-compose run --rm 220009456-web php -l src/login.php'
            }
        }
        
        stage('Deploy') {
            steps {
                echo 'Deploy stage running'
                sh 'docker-compose up -d'
            }
        }
        
        stage('Integration Test') {
            steps {
                echo 'Integration Test stage running'
                sleep time: 30, unit: 'SECONDS'
                sh 'curl -f http://localhost:8080 || exit 1'
            }
        }
    }
    
    post {
        always {
            echo 'Pipeline completed'
            sh 'docker-compose down'
        }
    }
}