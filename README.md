# 🌍 Travel Diary

**Travel Diary** is a simple web-based travel journal that allows users to log their travel experiences with a title, date, message, and image. Each entry is stored in a MySQL database and displayed in a paginated list.

🔗 **Live Demo**: [https://traveldiary.xo.je/index.php](https://traveldiary.xo.je/index.php)

---

## ✨ Features

- 📝 Create new diary entries with:
  - Title  
  - Travel date  
  - Description/message  
  - Optional image (auto-resized for web)
- 📸 Image upload with automatic resizing (max dimension: 400px)
- 📂 Entries shown in reverse chronological order (newest first)
- 📄 Pagination (3 entries per page)
- 🎨 Responsive and clean UI using custom CSS

---

## 🛠️ Technologies Used

- **PHP** (no framework)
- **MySQL** with **PDO**
- **HTML5**
- **CSS3**
- Hosted on **InfinityFree**

---

## 📁 Project Structure

```
/index.php → Displays all travel entries
/form.php → Form to add new entries
/uploads/ → Stores uploaded images
/inc/
└─ db-connect.inc.php → Database connection
└─ functions.inc.php → Utility functions
/views/
└─ header.view.php → Site header
└─ footer.view.php → Site footer
/styles/
└─ styles.css → Custom styles
└─ normalize.css → Normalize default browser styles
```

---

## 🧭 How to Use

1. Navigate to [https://traveldiary.xo.je/index.php](https://traveldiary.xo.je/index.php)
2. Click **"New Entry"** to add your travel story
3. Fill in the title, date, message, and optionally upload an image
4. Submit and your entry will appear on the homepage!

