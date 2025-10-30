<!-- Zphisher Enhanced Edition - Fork -->

<p align="center">
  <img src=".github/misc/logo.png">
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Version-2.3.5--Enhanced-green?style=for-the-badge">
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
<i>Optimized tunneling • Advanced geolocation • 44+ templates • Improved stability</i>
</p>

##

### 🆚 What's Different in this Fork?

This Enhanced Edition adds significant improvements while maintaining full compatibility with the original Zphisher:

#### ✨ Enhanced Features

**🌐 Optimized Tunneling System**
- ✅ **Serveo Integration** - New stable tunnel (unlimited, recommended)
- ⚡ **Improved Cloudflared** - Better compatibility with Android/Termux
- 🔄 **LocalXpose Support** - Alternative tunnel option
- 🛡️ **Smart PHP Verification** - Automatic server health checks
- 📊 **Better Error Handling** - Helpful suggestions when tunnels fail

**📍 Advanced Data Capture**
- 🌍 **Enhanced Geolocation** - Country, City, ISP detection
- ⏰ **Timestamp Logging** - Precise capture times
- 🌐 **User-Agent Tracking** - Device/browser information
- 📝 **Structured Format** - Better organized captured data

**🔧 Stability Improvements**
- ✅ **Fixed Forbidden Errors** - .htaccess in all 44 templates
- 🚀 **Optimized Wait Times** - 12-18 seconds based on tunnel
- 💾 **Process Management** - Better SSH/PHP handling
- 🔄 **Automatic Recovery** - Fallback mechanisms

**🎯 Tunnel Comparison**

| Tunnel | Status | Speed | Limit | Notes |
|--------|--------|-------|-------|-------|
| **Serveo** ⭐ | ✅ Excellent | Fast | Unlimited | **New in Enhanced** - Most reliable |
| LocalXpose | ✅ Good | Medium | 15 min free | Alternative option |
| Cloudflared | ⚠️ Variable | Fast | Unlimited | Improved compatibility |
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
# Clone this fork
git clone --depth=1 https://github.com/[YOUR-USERNAME]/zphisher-enhanced.git

# Navigate to directory
cd zphisher-enhanced

# Run Zphisher
bash zphisher.sh
Or install original version:
git clone --depth=1 https://github.com/htr-tech/zphisher.git

📱 Installation (Termux)
# Update packages
pkg update && pkg upgrade -y

# Install dependencies
pkg install git php curl openssh -y

# Clone this enhanced fork
git clone --depth=1 https://github.com/[YOUR-USERNAME]/zphisher-enhanced.git
cd zphisher-enhanced
bash zphisher.sh
⚠️ A Note :
Termux discourages hacking .. So never discuss anything related to zphisher in any of the termux discussion groups. For more check : wiki

🐧 Installation (Linux)
# Install dependencies
sudo apt update
sudo apt install git php curl openssh-client -y

# Clone and run
git clone --depth=1 https://github.com/[YOUR-USERNAME]/zphisher-enhanced.git
cd zphisher-enhanced
bash zphisher.sh

🐳 Run on Docker
Original Docker Images:
DockerHub: docker pull htrtech/zphisher
GHCR: docker pull ghcr.io/htr-tech/zphisher:latest
Note: Docker images are from the original project. This fork adds enhancements to the tunneling system which work in standard installations.

📖 Usage
Recommended Workflow (Enhanced)
Start Zphisher
cd zphisher-enhanced
bash zphisher.sh
Choose Template (e.g., Instagram → Traditional)
Select Tunnel (Recommendations):
🥇 Option 02 - Serveo (Recommended for this fork)
🥈 Option 03 - LocalXpose (Backup option)
🥉 Option 04 - Cloudflared (If others fail)
Copy Generated URL and share it
Monitor Captures in real-time
Enhanced Output Example
[-] Initializing... ( http://127.0.0.1:8080 )

[-] Verifying PHP server... ✓ OK

[-] Launching Serveo...
[✓] Tunnel established successfully!

[-] URL 1 : https://abc123.serveo.net
[-] URL 2 : https://tinyurl.com/xyz123
[-] URL 3 : https://get-free-followers@tinyurl.com/xyz123

[-] Waiting for Login Info, Ctrl + C to exit...

[-] Victim IP Found !
[-] Victim's IP : 203.0.113.42
[-] Country: United States | City: New York | ISP: Example ISP
[-] Saved in : auth/ip.txt

[-] Login info Found !!
[-] Account : victim@example.com
[-] Password : ********
[-] Saved in : auth/usernames.dat

�
🔧 Dependencies


Required:
git
curl
php (7.4+)
openssh-client (for Serveo tunnel in Enhanced edition)
All dependencies are installed automatically on first run.
�

�
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
�

�
🐛 Troubleshooting (Enhanced Edition)


Cloudflared doesn't work
Symptom: Check internet connection...
Solution: This fork adds Serveo specifically for this issue
# Select Option 02 (Serveo) instead
# More compatible with Android/Termux
PHP verification fails
Solution: Enhanced edition auto-restarts PHP
# If manual restart needed:
killall php
bash zphisher.sh
Tunnel keeps disconnecting
Solutions:
✅ Use Serveo (most stable in this fork)
Keep Termux in foreground
Stable internet connection required
LocalXpose free = 15 min limit
All templates return Forbidden
Solution: Fixed in Enhanced Edition - all 44 templates include .htaccess
�


🆚 Enhanced vs Original
Feature
Original v2.3.5
This Fork (Enhanced)
Templates
30
44
Serveo Tunnel
❌
✅ New & Recommended
PHP Verification
❌
✅ Automatic
Geolocation
Basic IP
📍 Country/City/ISP
Error Handling
Basic
🛡️ Comprehensive + Suggestions
Cloudflared
Sometimes fails
⚡ Improved compatibility
.htaccess Fix
Manual
✅ All templates
Wait Times
8-12 sec
⏱️ Optimized 12-18 sec
Process Handling
Basic
🚀 Advanced (setsid)

🤝 Contributing
To This Fork
Contributions to the Enhanced Edition are welcome!
Report issues specific to enhancements
Suggest new tunnel integrations
Improve documentation
To Original Project
For original Zphisher features, contribute to: htr-tech/zphisher

📜 License
GPL-3.0 License - Same as original project
This is a fork and derivative work of Zphisher by htr-tech, licensed under GPL-3.0.

👏 Credits
🌟 Original Zphisher
Author: htr-tech (Tahmid Rayat)
Original Repository: htr-tech/zphisher
License: GPL-3.0
Please ⭐ star the original repository too!
✨ Enhanced Edition
Fork & Enhancements: Darkrevengehack (2025)
Major Additions:
Serveo tunnel integration
Advanced geolocation system
Improved error handling & stability
44 templates with .htaccess fixes
🙏 Special Thanks
Original Zphisher team and all contributors
Termux community
Tunnel providers: Serveo, Cloudflared, LocalXpose

📞 Links
This Fork (Enhanced): [YOUR-GITHUB-URL]
Original Project: github.com/htr-tech/zphisher
Report Issues (Enhanced features): [Your Issues Page]
Report Issues (Original features): htr-tech Issues

🔗 Find Original Author:
�
￼ ￼ 



💝 Thanks to Original Contributors:
�
￼
1RaY-1￼
Aditya Shakya￼
Ali Milani￼
AmnesiA￼
KasRoudra￼
Moises Tapia￼
Mr.Derek￼
Mustakim Ahmed￼
sepp0￼
TripleHat￼
Yisus7u7

�
⭐ If you find this enhanced fork useful, please star both this repo and the original project! ⭐ 


�
Fork maintained with ❤️ for the cybersecurity community
Built upon the excellent work of htr-tech 


�

�

