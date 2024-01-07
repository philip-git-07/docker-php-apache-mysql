pipeline {
    agent any // This will allow Jenkins to run the pipeline on any available agent

    stages {
        stage('Run Docker Compose') {
            steps {
                sh ' docker-compose up -d'
            }
        }
    }
}
