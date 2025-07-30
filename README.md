# 🎲 Spanish Lottery Results – Kadence Child Theme

<img width="1349" height="3459" alt="image" src="https://github.com/user-attachments/assets/9d5d045a-4390-4225-b535-8363b75c0f8f" />


A modern, fast, and optimized WordPress child theme for Spanish state lottery results, built for [Kadence Theme](https://www.kadencewp.com/).  
Shows the latest result for each lottery, with organized template files, mobile-first UI, and focused on speed, clarity, SEO, and accessibility.

**Made and released by Hami (Muhammad Hamza Nazeer).**

---

## 📦 Features

- **Latest lottery by category:** Home page smartly shows only one up-to-date result for each lottery type.
- **Modern UI with Glass/Gradient:** Carefully crafted styling with lottery-specific color themes, glassmorphism, and subtle gradients.
- **SEO & Accessibility:** Proper meta tags, open graph, JSON-LD, ARIA and keyboard navigation support.
- **Kadence Integration:** Leverages all Kadence Theme features. Continue using the visual customizer and Kadence settings.
- **Mobile Friendly:** 100% responsive across all devices.
- **Clean separation:** Archives and single template files for each lottery.
- **No newsletter or popups:** Pure results experience.

---

## 🚀 Quick Start

### 1. Install Kadence Theme (Required Parent)

1. In your WordPress admin, go to **Appearance > Themes > Add New**.
2. Search for "**Kadence**", install and activate.

### 2. Install the Child Theme

1. Download or clone this repository as a ZIP.
2. Go to **Appearance > Themes > Add New > Upload Theme**.
3. Upload the ZIP, install, and activate.
4. The customized homepage and lottery archives will appear right away!

### 3. Custom Post Types

Make sure you register the necessary custom post types for each lottery:
- `euromillions`
- `bonoloto`
- `primitiva`
- `elgordo`
- `eurodreams`
- `lototurf`
- `quintupleplus`
- `quiniela`

*(You can use a plugin like CPT UI or add them in `functions.php`.)*

---

## 📁 Theme File Structure

Every file/folder in your child theme package:

/spanish-lottery-kadence-child/
├── front-page.php
├── functions.php
├── style.css
├── admin-styles.css
├── screenshot.png
├── template-parts/
│ ├── lottery-header.php
│ ├── archive-bonoloto.php
│ ├── archive-elgordo.php
│ ├── archive-eurodreams.php
│ ├── archive-euromillions.php
│ ├── archive-lototurf.php
│ ├── archive-nacional.php
│ ├── archive-primitiva.php
│ ├── archive-quiniela.php
│ ├── archive-quinigol.php
│ ├── archive-quintuple.php
│ ├── front-page.php
│ ├── page-lottery-results.php
│ ├── single-bonoloto.php
│ ├── single-elgordo.php
│ ├── single-eurodreams.php
│ ├── single-euromillions.php
│ ├── single-lototurf.php
│ ├── single-primitiva.php
│ ├── single-quiniela.php
│ ├── single-quinigol.php
│ ├── single-quintuple.php
│ ├── single-quintupleplus.php
└── [other theme or custom files if needed]



- **`front-page.php`** – Home template with category-wise latest result logic.
- **`template-parts/`** – Archive and single result templates for every supported lottery.
- **`functions.php`** – Customizer/Kadence hooks, CPTs, meta, etc.
- **`style.css`** and **`admin-styles.css`** – All styles (frontend and admin).
- **Screenshot** for WP dashboard theme preview.

---

## ⚙️ Customization

- Edit templates in `template-parts/` if you need to change lottery layout.
- Adjust branding in `style.css` or add your own CSS.
- Add new lottery post types, icons, or features as needed.
- You can use all Kadence Theme features, blocks, and customizer settings as usual—this theme inherits them all!

---

## ❓ FAQ

**Q:** Do I need Kadence Theme installed?  
**A:** Yes. This is a child theme and will not work without Kadence (free or Pro) active.

**Q:** Where do I add new lotteries or fields?  
**A:** Register new custom post types, and add your meta fields. Duplicate template-parts as needed for new types.

**Q:** Does this theme have a newsletter or popup?  
**A:** No—it's focused only on showing clean, fast, accessible lottery results.

**Q:** Is it open source?  
**A:** Yes! Licensed GPL v2, so you (and others) can use, remix, redistribute, and contribute.

---

## 🙏 Credits

- Theme author: **Hami** (Muhammad Hamza Nazeer)
- Based on [Kadence Theme](https://www.kadencewp.com/) (parent required)
- Icon emojis: Unicode/Twemoji

---

## 📄 License

**This child theme is released under the [GNU General Public License v2.0 or later (GPL-2.0+)](https://www.gnu.org/licenses/gpl-2.0.html)**

You are free to use, modify, redistribute, or sell this code.  

### ⚠️ Disclaimer

**This theme is provided "as is" without warranty of any kind. Use at your own risk. The author (Hami - Muhammad Hamza Nazeer) is not responsible for any damages, issues, data loss, or problems arising from the use of this theme.**

**GNU General Public License v2 (GPL-2.0-or-later) Summary**

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program. If not, see [https://www.gnu.org/licenses/gpl-2.0.html](https://www.gnu.org/licenses/gpl-2.0.html).

---

## Support and Contributions

Feel free to report issues, submit pull requests, or contribute translations.

---

Thank you for choosing this theme! If you customize or improve it, please consider sharing your improvements to help the community.


---

**Feedback, issues, and pull requests are always welcome. Enjoy!**

*— Hami (Muhammad Hamza Nazeer) – 2025*

