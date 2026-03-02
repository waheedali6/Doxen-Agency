<div class="service-details sec-pd theme-bg">
    <div class="container">
        <div class="service-content">
            
        </div>
    </div>
</div>



<script>

   const serviceData = [
        {
            id: 1,
            title: "Website Development",
            detail:
            "Lorem ipsum dolor sit amet, consectetur Ut elit tellus adipiscing elit. Ut elit tellus, luctus nec.",
        },
        {
            id: 2,
            title: "Logo Design",
            detail:
            "Lorem ipsum dolor sit amet, consectetur Ut elit tellus adipiscing elit. Ut elit tellus, luctus nec.",
        },
        {
            id: 3,
            title: "Ecommerce Solutions",
            detail:
            "Lorem ipsum dolor sit amet, consectetur Ut elit tellus adipiscing elit. Ut elit tellus, luctus nec.",
        },
        {
            id: 4,
            title: "Illustration",
            detail:
            "Lorem ipsum dolor sit amet, consectetur Ut elit tellus adipiscing elit. Ut elit tellus, luctus nec.",
        },
        {
            id: 5,
            title: "Marketing Collateral",
            detail:
            "Lorem ipsum dolor sit amet, consectetur Ut elit tellus adipiscing elit. Ut elit tellus, luctus nec.",
        },
        {
            id: 6,
            title: "Mobile Apps",
            detail:
            "Lorem ipsum dolor sit amet, consectetur Ut elit tellus adipiscing elit. Ut elit tellus, luctus nec.",
        },
        {
            id: 7,
            title: "SEO Services",
            detail:
            "Lorem ipsum dolor sit amet, consectetur Ut elit tellus adipiscing elit. Ut elit tellus, luctus nec.",
        },
        {
            id: 8,
            title: "Digital Marketing",
            detail:
            "Lorem ipsum dolor sit amet, consectetur Ut elit tellus adipiscing elit. Ut elit tellus, luctus nec.",
        },
        {
            id: 9,
            title: "Creative Copywriting",
            detail:
            "Lorem ipsum dolor sit amet, consectetur Ut elit tellus adipiscing elit. Ut elit tellus, luctus nec.",
        },
];

const params = new URLSearchParams(window.location.search);
const serviceId = parseInt(params.get("id"));
const service = serviceData.find((s) => s.id === serviceId);
const serviceContent = document.querySelector(".service-content");

serviceContent.innerHTML = `
    <h1 class="sec-hd mb-3">${service.title}</h1>
    <p class="para-main">${service.detail}</p>
    `;
</script>