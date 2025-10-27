pipeline {
    agent any

    environment {
        IMAGE_NAME = 'althaffrl/ngueng_rent'
        REGISTRY_CREDENTIALS = 'dockerhub-credentials2'
    }

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Build') {
            steps {
                bat 'echo "Build di Windows"'
            }
        }

        stage('Build Docker Image') {
            steps {
                bat """docker build -t ${env.IMAGE_NAME}:${env.BUILD_NUMBER} ."""
            }
        }

        stage('Push Docker Image') {
            steps {
                withCredentials([usernamePassword(credentialsId: env.REGISTRY_CREDENTIALS, usernameVariable: 'USER', passwordVariable: 'PASS')]) {
                    // Login pakai password-stdin (lebih aman dan reliable)
                    bat """
                    echo %PASS% | docker login -u %USER% --password-stdin
                    docker tag ${env.IMAGE_NAME}:${env.BUILD_NUMBER} ${env.IMAGE_NAME}:latest
                    docker push ${env.IMAGE_NAME}:${env.BUILD_NUMBER}
                    docker push ${env.IMAGE_NAME}:latest
                    docker logout
                    """
                }
            }
        }
    }
}

