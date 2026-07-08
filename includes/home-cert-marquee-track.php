<?php
/**
 * Pista del marquee de certificaciones (inicio).
 * Requiere $homeCertLogos definido antes del include.
 */
if (empty($homeCertLogos)) {
  return;
}
?>
<div class="cert-marquee__track">
  <?php foreach ([1, 2, 3] as $marqueeSeq): ?>
  <div class="cert-marquee__group<?= $marqueeSeq > 1 ? ' cert-marquee__group--clone' : '' ?>" role="<?= $marqueeSeq === 1 ? 'list' : 'presentation' ?>"<?= $marqueeSeq > 1 ? ' aria-hidden="true"' : '' ?>>
    <?php foreach ($homeCertLogos as $cert): ?>
      <div class="cert-marquee__cell"<?= $marqueeSeq === 1 ? ' role="listitem"' : '' ?>>
        <?php if (!empty($certMarqueeDecorative)): ?>
          <span class="cert-marquee__link cert-marquee__link--static"<?= $marqueeSeq === 1 ? ' title="' . htmlspecialchars($cert['alt'], ENT_QUOTES, 'UTF-8') . '"' : '' ?>>
            <img src="<?= htmlspecialchars(site_asset_href($cert['src']), ENT_QUOTES, 'UTF-8') ?>" alt="<?= $marqueeSeq === 1 ? htmlspecialchars($cert['alt'], ENT_QUOTES, 'UTF-8') : '' ?>" width="88" height="88" class="cert-marquee__img" loading="eager" decoding="async">
          </span>
        <?php else: ?>
        <a href="<?= htmlspecialchars(isset($certMarqueeHref) ? $certMarqueeHref : site_asset_href('nosotros/certificaciones.php'), ENT_QUOTES, 'UTF-8') ?>" class="cert-marquee__link"<?= $marqueeSeq === 1 ? ' title="' . htmlspecialchars($cert['alt'], ENT_QUOTES, 'UTF-8') . '"' : ' tabindex="-1"' ?>>
          <img src="<?= htmlspecialchars(site_asset_href($cert['src']), ENT_QUOTES, 'UTF-8') ?>" alt="<?= $marqueeSeq === 1 ? htmlspecialchars($cert['alt'], ENT_QUOTES, 'UTF-8') : '' ?>" width="88" height="88" class="cert-marquee__img" loading="eager" decoding="async">
        </a>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  </div>
  <?php endforeach; ?>
</div>
