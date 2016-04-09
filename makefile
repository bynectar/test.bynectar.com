all: scss serve

build: scss

scss:
	scss user/themes/nectar/scss/styles.scss:user/themes/nectar/css-compiled/styles.css

serve:
	php -S 127.0.0.1:8080