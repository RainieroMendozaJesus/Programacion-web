import utils from './utils';

/* -------------------------------------------------------------------------- */
/*                                  Count Up                                  */
/* -------------------------------------------------------------------------- */

const countupInit = () => {
  if (window.countUp) {
    const countups = document.querySelectorAll('[data-countup]');
    countups.forEach((node) => {
      const { autoIncreasing, ...options } = utils.getData(node, 'countup');
      let { endValue } = options;
      const countUp = new window.countUp.CountUp(node, endValue, {
        duration: 5,
        enableScrollOnce: true,
        ...options,
      });
      if (!countUp.error && autoIncreasing) {
        countUp.update(endValue);
        const interval = setInterval(() => {
          endValue += 1;
          countUp.update(endValue);
        }, 1500);
        window.addEventListener('close', () => {
          clearInterval(interval);
        });
      } else if (!countUp.error) {
        countUp.start();
      } else {
        console.error(countUp.error);
      }
    });
  }
};

export default countupInit;
