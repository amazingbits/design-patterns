export const fetchData = async (apiURL: string): Promise<any> => {
  try {
    const response = await fetch(apiURL);
    return await response.json();
  } catch (err: unknown) {
    throw new Error("Cannot connect with API service");
  }
};
