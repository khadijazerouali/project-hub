let likeCount = 0;
let liked = false;

function toggleLike() {
    liked = !liked; 
    if (liked) {
        likeCount++;
        document.getElementById("like-icon").classList.add("text-danger"); 
    } else {
        likeCount--;
        document.getElementById("like-icon").classList.remove("text-danger");
    }
    document.getElementById("like-count").innerText = likeCount; 
}
