# Laravel Armageddon

![Packagist Version](https://img.shields.io/packagist/v/maventama/laravel-armageddon)
![License](https://img.shields.io/github/license/maventama/laravel-armageddon)

## 📌 Description
**Laravel Armageddon** is a Laravel package designed to "destroy" a project by deleting essential folders and files such as:
- `vendor/`
- `node_modules/`
- `composer.json`
- `package.json`

Perfect for cleaning up a project before a total reset or just for fun with friends (use responsibly!).

---

## 🚀 Installation
Run the following command in the root of your Laravel project:
```sh
composer require maventama/laravel-armageddon
```

Laravel will automatically detect this package via the service provider.

---

## ⚡ Usage
Execute the following Artisan command to trigger Armageddon:
```sh
# For Test
php artisan app:armageddon-test

# For Production
php artisan app:armageddon
```

Once executed, this package will delete the specified files and folders. **Use with caution!**

---

## 🔥 Contribution
If you would like to contribute, feel free to fork this repository and submit a pull request!

---

## 📜 License
This project is licensed under the [MIT](LICENSE) License.

---

💥 **Use wisely, don't regret it later!** 💥