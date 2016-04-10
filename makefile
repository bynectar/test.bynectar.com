all: scss serve

build: scss

watch: scsswatch

scss:
	scss user/themes/nectar/scss/styles.scss:user/themes/nectar/css-compiled/styles.css

scsswatch:
	scss --watch user/themes/nectar/scss/styles.scss:user/themes/nectar/css-compiled/styles.css

serve:
	php -S 127.0.0.1:8080