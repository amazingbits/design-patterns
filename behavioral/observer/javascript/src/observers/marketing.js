export default class Marketing {
  update({ id, username }) {
    console.log(
      `[${id}]: [marketing] will send an welcome email to ${username}`
    );
  }
}
