<div class="article-inline-image">
    <a href="@Model.Src" target="_blank">
        <figure>
            <img src="@Model.Src" alt="@Model.AltText" />
        </figure>
        @if (!string.IsNullOrEmpty(Model.AltText))
        {
            <div class="inline-image-title">
                @Model.AltText
            </div>
        }
    </a>
</div>