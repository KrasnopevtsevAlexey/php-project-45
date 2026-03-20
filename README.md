# 🧠 Игры разума (Brain Games)

### Hexlet tests and linter status:
[![Actions Status](https://github.com/KrasnopevtsevAlexey/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/KrasnopevtsevAlexey/php-project-45/actions)

[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=KrasnopevtsevAlexey_php-project-45&metric=alert_status)](https://sonarcloud.io/summary/new_code?id=KrasnopevtsevAlexey_php-project-45)
[![Bugs](https://sonarcloud.io/api/project_badges/measure?project=KrasnopevtsevAlexey_php-project-45&metric=bugs)](https://sonarcloud.io/summary/new_code?id=KrasnopevtsevAlexey_php-project-45)
[![Code Smells](https://sonarcloud.io/api/project_badges/measure?project=KrasnopevtsevAlexey_php-project-45&metric=code_smells)](https://sonarcloud.io/summary/new_code?id=KrasnopevtsevAlexey_php-project-45)
[![Security Rating](https://sonarcloud.io/api/project_badges/measure?project=KrasnopevtsevAlexey_php-project-45&metric=security_rating)](https://sonarcloud.io/summary/new_code?id=KrasnopevtsevAlexey_php-project-45)
[![Reliability Rating](https://sonarcloud.io/api/project_badges/measure?project=KrasnopevtsevAlexey_php-project-45&metric=reliability_rating)](https://sonarcloud.io/summary/new_code?id=KrasnopevtsevAlexey_php-project-45)
[![Maintainability Rating](https://sonarcloud.io/api/project_badges/measure?project=KrasnopevtsevAlexey_php-project-45&metric=sqale_rating)](https://sonarcloud.io/summary/new_code?id=KrasnopevtsevAlexey_php-project-45)
[![Duplicated Lines (%)](https://sonarcloud.io/api/project_badges/measure?project=KrasnopevtsevAlexey_php-project-45&metric=duplicated_lines_density)](https://sonarcloud.io/summary/new_code?id=KrasnopevtsevAlexey_php-project-45)

## 📋 Описание

**«Игры разума»** — набор из пяти консольных игр, построенных по принципу популярных мобильных приложений для тренировки мозга. Каждая игра задает вопросы, на которые нужно дать правильные ответы. После трех правильных ответов игра считается пройденной. Неправильный ответ завершает игру и предлагает пройти ее заново.

### 🎮 Игры:
- **Brain-Even** — определение четного числа
- **Brain-Calc** — арифметические выражения, которые нужно вычислить
- **Brain-Gcd** — нахождение наибольшего общего делителя
- **Brain-Progression** — поиск пропущенных чисел в последовательности
- **Brain-Prime** — определение простого числа

## 🛠 Системные требования

- PHP версии **8.3 или выше**
- Composer версии **2.0 или выше**
- Операционная система: Linux, macOS, Windows (WSL)

## 📦 Установка

1. **Клонируйте репозиторий:**
   ```bash
   git clone https://github.com/KrasnopevtsevAlexey/php-project-45.git
   cd php-project-45
2. **Установите зависимости:**
   make install или composer install


### Раздел "Запуск игр"
```markdown
## 🚀 Запуск игр

Каждая игра запускается отдельной командой:

| Команда | Описание |
|---------|----------|
| `make brain-games` | Приветствие (проверка работы) |
| `make brain-even` | Игра "Четное/Нечетное" |
| `make brain-calc` | Игра "Калькулятор" |
| `make brain-gcd` | Игра "НОД" |
| `make brain-progression` | Игра "Арифметическая прогрессия" |
| `make brain-prime` | Игра "Простое число" |

Также можно запускать напрямую:
```bash
./bin/brain-even
./bin/brain-calc
# и т.д.


## 📊 Демонстрация всех игр

[![asciicast](https://asciinema.org/a/ZQ5f6c1YBoSWdflE.svg)](https://asciinema.org/a/ZQ5f6c1YBoSWdflE)


