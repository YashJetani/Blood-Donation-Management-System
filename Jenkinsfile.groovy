pipeline {
    agent { label 'agent-master' }  // Runs on agent 'yash'

    stages {    
        stage('Clone Repository') {
            steps {
                sh "pwd"
                sh "rm -rf Blood-Donation-Management-System && git clone https://github.com/YashJetani/Blood-Donation-Management-System.git"
            }
        }

        stage('Build/Run') {
            steps {
                sh "cd Blood-Donation-Management-System && docker compose up --build -d"
           
            }
        }
        stage('Ngrok tunning') {
            steps {
                sh "docker run --net=host -itd -e NGROK_AUTHTOKEN=2w5ixWT5rKxetVDSp2Swjg6OCgN_74kQThH6tFE9NLVcVZjMA ngrok/ngrok:latest http --url=loyal-morally-kodiak.ngrok-free.app 8000"
            }
        }
        
        stage('Initialize Database') {
            steps {
                sh "docker exec -i mysql_db mysql < Blood-Donation-Management-System/init.sql"
            }
        }
    }
}
