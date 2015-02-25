# bostoncodingcamp
################################################################
# HOW TO FILE FOR SETTING UP A GIT ACCOUNT AND HEROKU ACCOUNT  #
#    							       #
#  **Create a Github account at www.github.com** 	       #
#  **Create a Heroku account at www.heroku.com**               #
################################################################

# <- GitHub Configuration ->

# <- Install and Configure Git And Heroku for user ->

# $ apt-get install git
# $ git config --global user.name " USERNAME "
# $ git config --global user.email " EMAIL "

# <- Now Lets Install Heroku! ->

# $ wget -qO- https://toolbelt.heroku.com/install-ubuntu.sh | s
# $ apt-get update

# <- Create A Directory Inside Your dev directory for the github project ->
# <- In This Instance I'll be creating a Folder called BCC for Boston Coding Camp inside of my static_html directory ->

# $ cd ~/dev/static_pages
# $ mkdir BCC
# $ cd BCC

# <- Run Git Init Inside Of The Directory You Wish To Work On The Repo From ->

# $ git init
# <- We're also going to want to run 'heroku create' to tell heroku that our app is in this directory ->
# $ heroku create

# <- You Can Now Perform git actions inside this directory. ->
# <- Assuming you are authenticated to contribute to this repo, pull a clone from using https ->

# $ git pull https://github.com/USERNAME/bostoncodingcamp.git

# <- After this command let's push our app to heroku ! ->

# $ git push heroku master

# <- This should deploy your app to your heroku sever. Lets actually start this server up! ->

# $ heroku ps:scale web=1

# <- And now, the moment of wizardry. ->

# $ heroku open

