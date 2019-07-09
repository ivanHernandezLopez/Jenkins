pipeline {
  agent any
  stages {
    stage('Inicio') {
      parallel {
        stage('Inicio') {
          steps {
            echo 'Iniciando Integracion Continua'
          }
        }
        stage('Clone') {
          steps {
            git(url: 'https://github.com/ivanHernandezLopez/Jenkins', branch: 'feature/pipeline', changelog: true, poll: true)
          }
        }
      }
    }
    stage('error') {
      steps {
        echo 'Sonar Scanner'
      }
    }
  }
}