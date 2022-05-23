## Installations
1. Clone this repo 
```
git clone https://github.com/ajrulrn/tourism-guide.git
cd tourism-guide
```
2. Install dependencies
```
composer install
```
3. Setup configuration
```
cp .env.example .env
```
4. Set your configuration application
```
APP_URL=http://localhost/tourism-guide
APP_ENV=development
```
5. Set your configuration database
```
DB_HOST=localhost
DB_USER=root
DB_PASS=
DB_NAME=tourism
DB_DRIVER=mysqli
```