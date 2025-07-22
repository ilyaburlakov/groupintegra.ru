<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Дорожная карта</title>
  <style>
    *{margin:0;padding:0;box-sizing:border-box;}
    body{font-family:Arial,sans-serif;background:#f5f7fa;color:#333;}
    .container{max-width:1000px;margin:0 auto;padding:0 15px;}
    .roadmap-section{padding:40px 0;background:#fff;}
    .roadmap-title{text-align:center;font-size:2rem;color:#1e3a8a;margin-bottom:40px;}
    .roadmap-timeline{position:relative;padding:20px 0;}
    .roadmap-timeline::before{content:'';position:absolute;top:0;left:50%;width:3px;height:100%;background:#3b82f6;transform:translateX(-50%);}
    .roadmap-item{display:flex;align-items:center;margin-bottom:30px;opacity:0;transform:translateY(30px);}
    .roadmap-item:nth-child(odd) .roadmap-content{margin-left:50px;}
    .roadmap-item:nth-child(even){flex-direction:row-reverse;}
    .roadmap-item:nth-child(even) .roadmap-content{margin-right:50px;text-align:right;}
    .roadmap-dot{width:16px;height:16px;background:#fff;border:3px solid #3b82f6;border-radius:50%;position:absolute;left:50%;transform:translateX(-50%);}
    .roadmap-item:hover .roadmap-dot{background:#ff6b6b;}
    .roadmap-content{background:#f5f7fa;color:#1e3a8a;padding:15px;border-radius:6px;width:45%;box-shadow:0 2px 5px rgba(0,0,0,0.1);}
    .roadmap-content h3{font-size:1.3rem;margin-bottom:5px;}
    .roadmap-content p{font-size:0.9rem;}
    .achievements .roadmap-content,.current .roadmap-content{background:#ff6b6b;color:#fff;}
    .achievements .roadmap-content h3,.current .roadmap-content h3{color:#fff;}
    @media (max-width:768px){
      .roadmap-title{font-size:1.5rem;}
      .roadmap-timeline::before{left:15px;}
      .roadmap-item{flex-direction:column;align-items:flex-start;}
      .roadmap-item:nth-child(odd) .roadmap-content,.roadmap-item:nth-child(even) .roadmap-content{margin-left:30px;margin-right:15px;width:80%;text-align:left;}
      .roadmap-dot{left:15px;}
    }
  </style>
</head>
<body>
  <section id="roadmap" class="roadmap-section">
    <div class="container">
      <h2 class="roadmap-title">Дорожная карта</h2>
      <div class="roadmap-timeline">
        <div class="roadmap-item" data-year="2007">
          <div class="roadmap-dot"></div>
          <div class="roadmap-content">
            <h3>2007</h3>
            <p>Основание компании, первые проекты в Санкт-Петербурге.</p>
          </div>
        </div>
        <div class="roadmap-item" data-year="2013">
          <div class="roadmap-dot"></div>
          <div class="roadmap-content">
            <h3>2013</h3>
            <p>Расширение комплекса услуг.</p>
          </div>
        </div>
        <div class="roadmap-item" data-year="2023">
          <div class="roadmap-dot"></div>
          <div class="roadmap-content">
            <h3>2023</h3>
            <p>Реализация 500+ проектов по всей России.</p>
          </div>
        </div>
        <div class="roadmap-item" data-year="2024">
          <div class="roadmap-dot"></div>
          <div class="roadmap-content">
            <h3>2024</h3>
            <p>Запуск направления цифровизации процесса строительного процесса.</p>
          </div>
        </div>
        <div class="roadmap-item achievements">
          <div class="roadmap-dot"></div>
          <div class="roadmap-content">
            <h3>Достижения</h3>
            <p>Реализация крупных проектов для офисных центров, торговых комплексов и промышленных объектов. Награды за инновации в цифровизации.</p>
          </div>
        </div>
        <div class="roadmap-item current">
          <div class="roadmap-dot"></div>
          <div class="roadmap-content">
            <h3>Текущее положение</h3>
            <p>Лидер в области слаботочных систем, работающий с объектами любой сложности в Москве, Санкт-Петербурге и по всей России.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script>
    gsap.registerPlugin(ScrollTrigger);
    gsap.utils.toArray(".roadmap-item").forEach(item => {
      gsap.fromTo(item, {opacity:0,y:30}, {
        opacity:1,y:0,duration:0.8,scrollTrigger:{trigger:item,start:"top 85%"}
      });
    });
  </script>
</body>
</html>