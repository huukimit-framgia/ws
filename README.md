# ws

## Installation

### Prepare
```
# Update vendor packages:
composer install

# Make .env file
cp .env.example .env

# Set up storage for laravel
chmod -R 777 storage
php artisan storage:link

# Build js, css
# apt-get install yarn
yarn install
npm run dev
```
### Setup database
You must config .env such as:
- Domain
- Database info
- Email config
- Queue and session

to we can continue. After config your .env, run commands:
```
# Setup database
php artisan migrate

# Install laravel passport
php artisan passport:install 
```
