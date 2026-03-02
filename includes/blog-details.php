<div class="blog-details sec-pd theme-bg">
    <div class="container">
        <div class="blog-content"></div>
        
    </div>
</div>



<script>
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

const params = new URLSearchParams(window.location.search);
const blogId = parseInt(params.get("id"));
const blog = blogData.find((b) => b.id === blogId);
const blogContent = document.querySelector(".blog-content");
blogContent.innerHTML = `
    <h1 class="sec-hd mb-4">${blog.title}</h1>
    <p class="para-main">${blog.detail}</p>
    `;

</script>