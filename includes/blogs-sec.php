<div class="blogs sec-pd theme-bg">
    <div class="container">
        <div class="row g-5 blog-list"></div>
    </div>
</div>




<script>
let blogList = document.querySelector(".blog-list");
const blogData = [
  {
    id: 1,
    title: "Managing Is The Way To Success Business",
    date: "September 24, 2025",
    detail:
      "Blanditiis tristique quibusdam. Ea aliquid eius, ipsa. Suspendisse. Torquent varius, primis aliquip, cum? Nullam consequat sociis imperdiet pharetra saepe justo...",
  },
  {
    id: 2,
    title: "We Deal With The Best Partnership Business",
    date: "September 24, 2025",
    detail:
      "Blanditiis tristique quibusdam. Ea aliquid eius, ipsa. Suspendisse. Torquent varius, primis aliquip, cum? Nullam consequat sociis imperdiet pharetra saepe justo...",
  },
  {
    id: 3,
    title: "Creating Ideas For Your Marketing Projects",
    date: "September 24, 2025",
    detail:
      "Blanditiis tristique quibusdam. Ea aliquid eius, ipsa. Suspendisse. Torquent varius, primis aliquip, cum? Nullam consequat sociis imperdiet pharetra saepe justo...",
  },
  {
    id: 4,
    title: "Managing Is The Way To Success Business",
    date: "September 24, 2025",
    detail:
      "Blanditiis tristique quibusdam. Ea aliquid eius, ipsa. Suspendisse. Torquent varius, primis aliquip, cum? Nullam consequat sociis imperdiet pharetra saepe justo...",
  },
  {
    id: 5,
    title: "We Deal With The Best Partnership Business",
    date: "September 24, 2025",
    detail:
      "Blanditiis tristique quibusdam. Ea aliquid eius, ipsa. Suspendisse. Torquent varius, primis aliquip, cum? Nullam consequat sociis imperdiet pharetra saepe justo...",
  },
  {
    id: 6,
    title: "Creating Ideas For Your Marketing Projects",
    date: "September 24, 2025",
    detail:
      "Blanditiis tristique quibusdam. Ea aliquid eius, ipsa. Suspendisse. Torquent varius, primis aliquip, cum? Nullam consequat sociis imperdiet pharetra saepe justo...",
  },
];

blogList.innerHTML = blogData.map((item) => {
  return `<div class="col-sm-12 col-md-6 col-lg-4">
                <div class="blog sec-bg-black rounded-3 overflow-hidden wow animate__animated animate__fadeInUp">
                <a href="blog-details.php?id=${item.id}">
                    <img src="assets/img/project-2.jpg" alt="" class="img-fluid">
                    </a>
                    <div class="px-3 pt-4 pb-5">
                    <a href="blog-details.php?id=${item.id}">
                        <h5 class="link card-title">${item.title}</h5>
                         </a>
                        <div class="d-flex align-items-center gap-2 my-2">
                        <i class="icon fa-solid fa-clock theme-color"></i>
                        <p class="para-main theme-color wow animate__animated animate__fadeInUp m-0">${item.date}</p>
                    </div>
                    <p class="para-main wow animate__animated animate__fadeInUp m-0">${item.detail}</p>
                    </div>
                </div>
            </div>`;
}).join("");

</script>